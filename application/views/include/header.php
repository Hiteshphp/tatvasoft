<html>
    <head>
        <title><?php echo isset($title) && !empty($title) ? $title : 'Event';?></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
        <div class="container">
            <?php
            if($this->session->userdata('success_message'))
            {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->userdata('success_message');
                echo '</div>';
                $this->session->unset_userdata('success_message');
            }
            else if($this->session->userdata('error_message'))
            {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->userdata('error_message');
                echo '</div>';
                $this->session->unset_userdata('error_message');
            }
            
            ?>
    
