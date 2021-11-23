<?php

    include_once (dirname(__FILE__)).'../../classes/input_class.php';

    function upload($input, $uploaded_by, $course, $file) {
        
        $request = new ResourceHub;
        $runQuery = $request->upload($input, $uploaded_by, $course, $file);
        
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getByCourse($course) {
        $request = new ResourceHub; 
        $runQuery = $request->getByCourse($course); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function updateFile($id, $filename, $file) {
        $request = new ResourceHub; 
        $runQuery = $request->updateFile($id, $filename, $file);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function deleteFile($id) {
        $request = new ResourceHub;
        $runQuery = $request->deleteFile($id, $filename, $file); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getUser($id) {
        $request = new ResourceHub;
        $runQuery = $request->getUser($id); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }
?>