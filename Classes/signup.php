<?php

class Signup
{
    private $error = "";
    public function evaluate($data)
    {
        
        foreach ($data as $key => $value)
        {
            if(empty($value))
            {
                $this->error = $this->error . $key . " "."is empty! <br>";
            }
        }if($this->error == ""){
            $this->create_user($data);
        }
        
    else
    {
        return $this->error;
    }
    }
    public function create_user($data)
    {   
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        
        
        
        $query = "insert into messages (name,email,message) values('$name','$email','$message')";
        
        
        
        $DB = new Database();
        $DB->save($query);
    }
    private function create_userid(){
        $length = rand(4,19);
        $number = "";

        for ($i=1; $i < $length ; $i++){
            $new_rand = rand(0,9);
            
            $number = $number . $new_rand;
        }
    return $number;
}
}