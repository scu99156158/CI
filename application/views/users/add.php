<h2>新增使用者</h2>
<form action="<?= site_url('users/create')?>" method="post">
  Id : <input name="id" type="text"> <br />
  Tel : <input name="tel" type="text"> <br />
  Name : <input name="name" type="text"> <br />
  Created_at : <input name="created_at" type="text"> <br />
  Updated_at : <input name="updated_at" type="text"> <br />
  <input type="submit">
</form>