<html>
  <head>
    <title></title>
    <style>
        html{
            font-family:calibri;
        }

        body{
            background-color:#eee;
        }
        .title{
            margin:0 auto;
            margin-bottom:20px;
            width:970px;
            font-size:25px;
            text-align:center;
            padding:20px;
            color:black;
            text-shadow:1px 1px 3px #FFF;
            background-color:white;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                border:1px double #ccc;
        }

        .error{
            margin:0 auto;
            width:970px;
            padding:20px;
            font-size:18px;
             background-color:#fedd57;
                -webkit-border-radius: 10px 10px 0px 0px;
                -moz-border-radius: 10px 10px 0px 0px;
                border-radius: 10px 10px 0px 0px;
                border:1px double #ccc;

        }

        .debug{
            margin:0 auto;
            width:970px;
            padding:20px;
             background-color:#fae9a4;
                -webkit-border-radius: 0px 0px 10px 10px;
                -moz-border-radius: 0px 0px 10px 10px;
                border-radius: 0px 0px 10px 10px;
                border:1px double #ccc;

        }

        .function{
          color:#838383;
        }
    </style>
  </head>
  <body>
      <div class="title">
        <?=$exception_title?>
      </div>
      <?php
      if($debug==true){
      ?>
      <div class="error">
        <?php
        echo "Throw an Exception in <b><i>$exception_file</i></b> [ Line $exception_line ]";
        if(ISSET($exception_message)){
          echo "<br>$exception_message";
        }
        ?>
      </div>
      <div class="debug">
        <table>
        <?php
        $no=1;
          foreach ($exception_trace as $key => $except_value) {
            if(ISSET($except_value['file'])){
              echo "<tr><td>$no.</td><td> at ";
              echo "$except_value[file] <b style='color:red;'><i>Line [$except_value[line]]</i></b></td></tr>";
              echo "<tr><td></td><td class='function'>";
            }else{
              echo "<tr><td>$no.</td><td class='function'>";
            }
            echo ISSET($except_value['class'])?$except_value['class']:"";
            echo ISSET($except_value['type'])?$except_value['type']:"";
            echo ISSET($except_value['function'])?$except_value['function']:"";
            if(ISSET($except_value['args']) AND count($except_value['args'])>0){
              echo " ( ";
                $i=0;
                foreach ($except_value['args'] as $except_data) {
                  if(is_array($except_data)){
                    $i++;
                  }else{
                    echo " ".$except_data." ";
                  }
                  $i++;
                  if($i<count($except_value['args'])-1){
                    echo ",";
                  }
                }
                unset($except_data);
              echo " )";
            }
            echo "</td></tr>";
            $no++;
          }
          unset($except_value);
        ?>
        </table>
      </div>
      <?php
      }
      ?>
  </body>

</html>
