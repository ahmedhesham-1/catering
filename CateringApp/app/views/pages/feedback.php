<?php
class feedback extends view{
  public function output(){
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
 ?>

                <form action="" method="post">

                <div class="feedback-header">
                <h1>Feedback</h1>
</div>


<div class="feedback-header2">
                <h1>Your opinion matters Help us improve our product? Give us your feedback</h1>

               <div class="feedback-textarea"> <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div><br>
                    <input type="submit" class="btn-feedback" value="Submit"></div>
                </form>
                
                


            
                <?php
  require APPROOT . '/views/inc/footer.php';

  }
}
?>