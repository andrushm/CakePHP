<div id="profile">

   <p>ID: <?= $user_profile['User']['id'];?></p>
   <p>First name: <?= $user_profile['User']['first_name'];?></p>
   <p>Last name: <?= $user_profile['User']['last_name'];?></p>
   <p>email: <?= $user_profile['User']['email'];?></p>
   <p>Gender: <?= $user_profile['Gender']['name'];?></p>
   <p><?= $this->Html->image($user_profile['User']['picture']);?></p>
   <p><button id="user_update" data-url="<?= Router::url(array('controller' => 'users', 'action' => 'profile', $user_profile['User']['id']));?>">Update</button></p>

</div>