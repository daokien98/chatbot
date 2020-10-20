<?php include 'db.php';
                        $query = "SELECT * FROM chats WHERE del_msg='1' ORDER by date DESC";
                        $res = mysqli_query($conn,$query);
                       
?> 

<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom.css">
  </head>
  <body>
    <span id=ref>
    <div class="container">
        <div class="row pt-3">
            <div class="chat-main">
                <div class="col-md-12 chat-header">

                    <div class="row header-one text-white p-1">
                        <div class="col-md-6 name pl-2">
                            <i class="fa fa-comment"></i>
                            <h6 class="ml-1 mb-0">Kiên Đào</h6>
                        </div>
                        <div class="col-md-6 options text-right pr-0">
                            <i class="fa fa-window-minimize hide-chat-box hover text-center pt-1"></i>
                            <p class="arrow-up mb-0">
                                <i class="fa fa-arrow-up text-center pt-1"></i>
                            </p>
                            <i class="fa fa-times hover text-center pt-1"></i>
                        </div>
                    </div>

                    <div class="row header-two w-100">
                        <div class="col-md-6 options-left pl-1">
                            <i class="fa fa-video-camera mr-3"></i>
                            <i class="fa fa-user-plus"></i>
                            <button style="border: none; margin-left: 5px" onclick="delete_message()"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="col-md-6 options-right text-right pr-2">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                </div>
                   
                <!--chat -->
                <div class="chat-content">
                    <div class="col-md-12 chats pt-3 pl-2 pr-3 pb-3">
                        <ul class="p-0">
                            <!--Khách nhắn --> 
                         <?php   while($data = mysqli_fetch_array($res)){
                                $user = $data['user'];
                                $chatbot = $data['chatbot'];
                                $date = $data['date'];
                            ?>
                            <li class="send-msg float-right mb-2">
                             
                                <p class="pt-1 pb-1 pl-2 pr-2 m-0 rounded">
                                    <?php echo $user;?>
                                    
                                </p>
                                <span class="send-msg-time"><?php echo $date;?></span>
                            </li>

                            <!--Chatbot trả lời -->
                             <li class="receive-msg float-left mb-2">
                                <div class="sender-img">
                                    <img src="http://nicesnippets.com/demo/image1.jpg" class="float-left">
                                </div>
                                <div class="receive-msg-desc float-left ml-2">
                                    <p class="bg-white m-0 pt-1 pb-1 pl-2 pr-2 rounded">
                                        <?php echo $chatbot;?>
                                    </p>
                                    <span class="receive-msg-time"><?php echo $date;?></span>
                                </div>
                            </li>
<?php }?>
                        </ul>
                    </div>

                    <div class="col-md-12 p-2 msg-box border border-primary">
                        <div class="row">
                            <div class="col-md-2 options-left">
                                <i style="padding:3px"class="fa fa-smile-o"></i>
                            </div>
                            <div class="col-md-7 pl-0">
                                <input id ="msg" type="text" class="border-0" placeholder="Nhập tin nhắn" />
                            </div>
                            <div class="col-md-3 text-right options-right">
                                <button type="button" onclick="send()" class="btn btn-sm btn-success">Gửi</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </body>
</span>
<script type="text/javascript">
        $('.hide-chat-box').click(function(){
            $('.chat-content').slideToggle();
        });
</script>
<script type="text/javascript">
    function send(){
        var text = $('#msg').val();
        // alert(text);
        $.ajax({
            type: "post",
            url: "mysearch.php",
            data: {text:text},
            success:function(data){
                $('#ref').load(' #ref');
            }
        });
    }

    function delete_message(){
        $.ajax({
            type: "post",
            url: "delete_message.php",
            success:function(data){
                $('#ref').load(' #ref');
            }
        });
    }
</script>
  
</html>