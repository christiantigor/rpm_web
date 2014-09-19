<?php

session_start(); 
		
if(isset($_POST["kirim"]) && $_POST["kirim"]=="masuk")
{
	
	$data_contact = array(
		'nama' =>  $_POST["nama"],
		'email' => $_POST["email"],
		'message' => $_POST["message"],
		'company' => $_POST["company"],
		'capca' => $_POST["capca"]
	);
	
	//filter input data
	if (trim(strip_tags($data_contact['nama']))=="") 
	{
		$_warning="nama";
	}
	else if (!filter_var(strip_tags($data_contact['email']), FILTER_VALIDATE_EMAIL)) 
	{
		$_warning="email";				
	}
	else if (!filter_var(strip_tags($data_contact['email']), FILTER_SANITIZE_EMAIL)) 
	{
		$_warning="email";
	}
	else if (trim(strip_tags($data_contact['message']))=="") 
	{
		$_warning="message";
	}
	else if($data_contact['capca']!=$_SESSION['simpankata'])
	{
		$_warning="capca";
	}
	else
	{
	
		// isi pesan
		$pesan ="
			<table cellpadding='5' cellspacing='5'>
				<tr>
					<td align='center' bgcolor='#29180C' style='color:#A78A48'>
						<p><strong>NEW MESSAGE VIA WEBSITE</strong> </p>
					</td>
				</tr>
				<tr>
					<td style='border:1px solid #A78A48'>
						<table cellpadding='5'>
							<tr>
								<td bgcolor='#29180C' style='color:#A78A48'><b>FROM </b></td><td>". strip_tags($data_contact['nama']) ."</td>
						  </tr>
							<tr>
								<td bgcolor='#29180C' style='color:#A78A48'><b>EMAIL </b></td><td>". strip_tags($data_contact['email']) ."</td>
						  </tr>
						  <tr>
								<td bgcolor='#29180C' style='color:#A78A48'><b>COMPANY </b></td><td>". strip_tags($data_contact['company']) ."</td>
						  </tr>
						  <tr>
								<td bgcolor='#29180C' style='color:#A78A48'><b>MESSAGE </b></td><td>". strip_tags($data_contact['message']) ."</td>
						  </tr>
						</table>
				  </td>
				</tr>
			</table>
				";
		
		//penerima pesan
		$penerima = "tigor.christian@tritronik.com";
		//subyek pesan
		$subjek = "[REM] Message from ".strip_tags($data_contact['nama']);
		
		//meta data
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .="From: RPM <no-reply@tritronik.com>\r\n";
		$headers .= "X-Sender:<no-reply@tritronik.com>\r\n";
		$headers .= "X-Mailer: PHP\r\n";
		$headers .= "X-Priority: 1\r\n";
		$headers .= "Return-Path:<no-reply@tritronik.com>\r\n";
		
		//fungsi kirim email
		@mail($penerima,$subjek,$pesan,$headers);
		
		//set callback == ok
		$_warning="ok";
	}
	  echo $_warning;
}

?>