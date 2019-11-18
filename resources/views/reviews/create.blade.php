<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>

<div class="container">
    <h1 class="text-center">Review</h1>
    <hr>
<form action="{{ route('review.store') }}" method="POST" class="">
        @csrf
          <div class="form-group row">
          <label for="title" class="col-md-3 form-control-label">Item Name: </label>
          <div class="col-md-9">
          <input type="text" class="form-control" id="title" name="title" placeholder="">
          </div>
          </div>
{{--
          <div class="form-group row">
                <label for="itemName" class="col-md-3 form-control-label">Name of item: </label>
                <div class="col-md-9">
                <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Item Name">
                </div>
                </div> --}}

          <div class="form-group row">
          <label for="typeOf" class="col-md-3 form-control-label">Select Item Type:</label>
          <div class="col-md-9">
          <select class="form-control" name="typeOf" id="typeOf">
              <option value="gloves">Gloves</option>
              <option value="boots">Boots</option>
              <option value="pads">Pads</option>
              <option value="wraps">Wraps</option>
              <option value="mouthguard">Mouthguard</option>
              <option value="other">Other</option>
          </select>
          </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-md-3 form-control-label">Description: </label>
            <div class="col-md-9">
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
          </div>
          </div>

          <div class="form-group">
              <label for="addImages">Add images: </label>
              <input type="file" class="form-control-file" id="addImages" name="addImages">
            </div>

            <div>
          <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>

</div>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
