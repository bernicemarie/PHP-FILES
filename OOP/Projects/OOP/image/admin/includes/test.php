$result_set = User::find_users_by_id(1);
                          
                          echo $result_set["username"];

                        
                     
                 $result_set = User::find_all_users();
                 while($row=mysqli_fetch_assoc($result_set)){
                  echo $row["username"] . "<br>";
                 }
                        