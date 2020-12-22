@csrf
  <div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" class="form-control col-md-3" id="name" name="name" value="{{old('name') ?? $product->name}}">
    <span class="text-danger">{{$errors->first('name')}}</span>
  </div>
  <div class="form-group">
    <label for="price">Preco:</label>
    <input type="text" class="form-control col-md-3" id="price" name="price" value="{{old('price') ?? $product->price}}">
    <span class="text-danger">{{$errors->first('price')}}</span>
  </div>
  <div class="form-group">
    <label for="category_id">Selecione uma categoria:</label>
    <select class="form-control col-md-3" id="category_id" name="category_id" value="{{old('category_id', "")}}">
      @foreach ($categories as $category)
      <option value="{{old('category_id',$category->id)}}">{{$category->title}}</option>    
      @endforeach
    </select>
  </div>
  <div class="form-group">
        <button type="submit" class="btn btn-success col-md-3">Salvar</button>
        
  </div>
