<div id = 'login'>

<form action="<?= $_SERVER['REQUEST_URI']?>" method="post" autocomplete="off">
<fieldset>
<legend><?= $msg?></legend>
<table>
	<tr>	
		<td>
			<div>
				<label for="txtUser">Логин</label>
				<input id="txtUser" type="text" name="user" value="<?= $user?>" required size="12"/>
			</div>
		</td>
		<td>
			<div>
				<label for="txtString">Пароль</label>
				<input id="txtString" type="password" name="pw" required  size="12"/>
			</div>
		</td>
		<td>
			<div>
				<button type="submit">Войти</button>
			</div>	
		</td>	
	</tr>
<!-- 	<tr>
		<td>			
			<label><input type='checkbox' name='remember'>Запомнить меня</label>
		</td>
		<td></td>
	</tr>
-->
 </table>
</fieldset>
</form>

</div>

