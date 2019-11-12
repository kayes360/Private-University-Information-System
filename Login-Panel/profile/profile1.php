<?php 
    $x ='hi'
?>

<a href="#" id='session_text' onclick="c()">Login/Sign Up</a>
<a href="#" id='session' onclick="d()">Loasdgin/Sign Up</a>
<script>
function c(){
    var x =  document.getElementById('session_text').innerHTML='asd';
}
function d(){
    var z =  document.getElementById('session').innerHTML= "<?php echo $x = 5; ?>" ;
    console.log(z);
}
</script>