<?php
    include 'init.php';
    if(isset($_POST['Submit'])) {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
        if (is_writable($file)) {
            echo 'The file is writable';
        } 
        else {
            echo 'The file is not writable';
        }
        $temp_file = tempnam(sys_get_temp_dir(), 'Tux');

        echo $temp_file;
        
        move_uploaded_file($file, '/home/shyamal/Pictures/upload');
        
        $sql = "INSERT INTO Product (`Product_Image`) VALUES ($file)";
        if(mysqli_query($con, $sql)) {  
           echo '<script>alert("Image Inserted into Database")</script>';  
        }
    }
?>

    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <title></title>
    </head>

    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
            <br><br>
            <input type="submit" name="Submit" id="Submit">
        </form>
    </body>

    </html>

    <script>
        $(document).ready(function() {
            $('#Submit').click(function() {
                var image_name = $('#image').val();
                if (image_name == '') {
                    alert("Please Select Image");
                    return false;
                } else {
                    var extension = $('#image').val().split('.').pop().toLowerCase();
                    if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                        alert('Invalid Image File');
                        $('#image').val('');
                        return false;
                    }
                }
            });
        });

    </script>
