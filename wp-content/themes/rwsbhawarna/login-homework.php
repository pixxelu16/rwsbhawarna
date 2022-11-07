<?php
/**
 * Template Name: Login HomeWork
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<!--login-->

<div style="margin-top:100px;">
  <input type="text" id="username" ninvalid="alert('You must fill out the form!');" name="fname" required placeholder="Username">
  <input type="password" id="password" placeholder="Password">
  <input type="button" value="Log on" onClick="clicked()">
</div>

<!--end -->
<script>function validation()
{
  var valfirst= document.getElementById("username").value;
  var valsecond=document.getElementById("password").value;
    
  if(valfirst == null || valfirst == "")
  {
    document.getElementById("spnFirstName").value=
    "First Name is required";
    return false;
  }
  else if (valsecond == null || valsecond == "")
  {
    document.write("Second Name is required");
    return false;
  } 
}</script>
<?php get_footer(); ?>
