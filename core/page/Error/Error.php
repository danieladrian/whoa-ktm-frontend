<html>
  <head>
    <title>Error Found</title>
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
        Whoops, looks like something went wrong.
      </div>
      <?php
      if($debug==true){
      ?>
      <div class="error">
        <?php
        echo "$error_message in<br><b><i>$error_file</i></b> [ Line $error_line ]";

        ?>
      </div>
      <div class="debug">
        <table>
        <?php
        $no=1;
          foreach ($debug_backtrace as $key => $value) {
            if(ISSET($value['file'])){
              echo "<tr><td>$no.</td><td>";
              echo $no==1?"in ":"at ";
              echo "$value[file] <b style='color:red;'><i>Line [$value[line]]</i></b></td></tr>";
              echo "<tr><td></td><td class='function'>";
            }else{
              echo "<tr><td>$no.</td><td class='function'>";
            }
            echo ISSET($value['class'])?$value['class']:"";
            echo ISSET($value['type'])?$value['type']:"";
            echo ISSET($value['function'])?$value['function']:"";
            if(ISSET($value['args']) AND count($value['args'])>0){
              echo " ( ";
                $i=0;
                foreach ($value['args'] as $data) {
                  if(is_array($data)){
                    $i++;
                  }else{
                    echo " ".$data." ";
                  }
                  $i++;
                  if($i<count($value['args'])-1){
                    echo ",";
                  }
                }
                unset($data);
              echo " )";
            }
            echo "</td></tr>";
            $no++;
          }
          unset($value);
        ?>
        </table>
      </div>
      <?php
      }
      ?>
  </body>

</html>
