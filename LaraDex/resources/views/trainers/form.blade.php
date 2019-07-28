@csrf
              
@if(isset($trainer))
<div class="form-group">
                    <label for="">Nombre: </label>
                    <input type="text" class="form-control" value="{{$trainer->name}}" name="name" id="name">
                </div>

                <div class="form-group">
                        <label for="">Avatar: </label>
                        <input type="file" name="avatar" id="avatar">
                    </div>
                <div class="form-group">
                            <label for="">ID: </label>
                            <input type="text" class="form-control" value="{{$trainer->slug}}" name="slug" id="slug">
                        </div>
@else

        <div class="form-group">
            <label for="">Nombre: </label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
                <label for="">Avatar: </label>
                <input type="file" name="avatar" id="avatar">
            </div>
        <div class="form-group">
                    <label for="">ID: </label>
                    <input type="text" class="form-control" name="slug" id="slug">
                </div>

@endif