<?php include 'common.php';
        $id=$_GET['id'];
        $sql = "select * from ".PRE."order where id=$id";
        $list=query($sql);

?>
<!DOCTYPE html>
<html>
     <head>
         <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <title>index</title>
 <link rel="stylesheet" href="./css/cash.css" type="text/css" media="screen" charset="utf-8">
    </head>
    <body>   

     <div id="main">
     <div class="box"><strong>确认收货,小心财物两空空哦~~~<br/><br/>实付款:<b style="color:red"><?php echo $list[0]['total']?></b></strong><br/></div>        
     <div class="zhifu">
        <div class="table">
        <table width="420">
            <form action="do_state.php?a=sure" method="POST">
                <tr align="center">
                    <td style="font-size:20px;">支付密码:</td>
                    <input type="hidden" name="id" value=<?php echo $id?>>
                    <td><input type="password" name="pwd" class="pwd"></td>
                    <td><input type="submit" value="确定" class="submit"></td>
                </tr>               
            </form>
        </table>
        </div>
    </div>
     </div>

<div class="clear"></div>
   

                                                                                                
</body>
</html>


