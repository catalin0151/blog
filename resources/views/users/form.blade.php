@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" value="{{isset($user) ? $user->name : ''}}" class="form-control" name="name">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="text" value="{{isset($user) ? $user->email: ''}}" class="form-control" name="email">
</div>

