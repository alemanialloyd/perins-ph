<?php

require_once 'vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

class Firestore {

    protected $db;
    protected $name;

    public function __construct(string $collection)
    {
        $this->db = new FirestoreClient([
            'projectId' => 'perins',
            // 'keyFilePath' =>  __DIR__.'/secret/perins-51235f3a0eb3.json'
        ]);

        $this->name = $collection;
    }
    
    public function all() {
        $arr = [];
        $query = $this->db->collection($this->name)->orderBy("date")->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $item) {
                $tmp = $item->data();
                $tmp['id'] = $item->id();
                $arr[] = $tmp;
            }
        }

        return $arr;
    }
    
    public function active($date) {
        $arr = [];
        $query = $this->db->collection($this->name)->where("attended", "=", 0)->orderBy("date")->startAt([$date])->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $item) {
                $tmp = $item->data();
                $tmp['id'] = $item->id();
                $arr[] = $tmp;
            }
        }

        return $arr;
    }
    
    public function inactive($date) {
        $arr = [];
        $query = $this->db->collection($this->name)->orderBy("date")->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $item) {
                if ($item["attended"] == 1 || $item["date"] < $date && $item["attended"] == 0) {
                    $tmp = $item->data();
                    $tmp['id'] = $item->id();
                    $arr[] = $tmp;
                }
            }
        }

        return $arr;
    }

    public function completed() {
        $arr = [];
        $query = $this->db->collection($this->name)->where("attended", "=", 2)->orderBy("date")->documents()->rows();
        if (!empty($query)) {
            foreach ($query as $item) {
                $tmp = $item->data();
                $tmp['id'] = $item->id();
                $arr[] = $tmp;
            }
        }

        return $arr;
    }

    public function getDocument(string $name) {
        try {
            if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                $tmp = $this->db->collection($this->name)->document($name)->snapshot()->data();
                $tmp["status"] ="success";
                $tmp["message"] ="success";
                return $tmp;
            } else {
                $response = array(
                    "status" => "error",
                    "message" => "Account does not exist"
                );
            }
        } catch (Exception $exception) {
            $status = $exception->getMessage();
            $status = json_decode($status, true);

            $response = array(
                "status" => "error",
                "message" => $status['status']
            );
        }

        return $response;
    }

    public function newDocument(string $name, array $data = [], string $success) {
        try {
            if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                $response = array(
                    "status" => "error",
                    "message" => "Document exists."
                );
            } else {
                $this->db->collection($this->name)->document($name)->create($data);

                $response = array(
                    "status" => "success",
                    "message" => $success,
                    "time" => $name
                );
            }
        } catch (Exception $exception){
            $status = $exception->getMessage();
            $status = json_decode($status, true);

            $response = array(
                "status" => "error",
                "message" => $status['status']
            );
        }

        return $response;
    }

    public function delete(string $name) {
        $this->db->collection($this->name)->document($name)->delete();
    }

    public function update(string $name, array $data = []) {
        $this->db->collection($this->name)->document($name)->update([$data]);
    }
}