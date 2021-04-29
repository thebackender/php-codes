<style>
  .profile-pic{
    background: darkseagreen;
    color: #eeeeee;
    border-radius: 50%;
    height: 60px;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.1rem;
    -webkit-box-shadow: 0 3px 5px rgb(54 60 241);
    box-shadow: 0 3px 5px rgb(54 60 241);
  }
</style>
<?php
function getProfilePicture($name){
  $name_slice = explode(' ',$name);
    $name_slice = array_filter($name_slice);
    $initials = '';
  $initials .= (isset($name_slice[0][0]))?strtoupper($name_slice[0][0]):'';
  $initials .= (isset($name_slice[count($name_slice)-1][0]))?strtoupper($name_slice[count($name_slice)-1][0]):'';
  return '<div class="profile-pic">'.$initials.'</div>';
}
?>
<?php echo getProfilePicture('Sachin Ramesh Tendulkar');?>
<br>
<?php echo getProfilePicture('Christiano Ronaldo');?>
<br>
<?php echo getProfilePicture('Donald Trump');?>
<br>
<?php echo getProfilePicture('Leader Spartan');?>