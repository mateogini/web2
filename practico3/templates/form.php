    <form action="add" method= "POST">
    <div class="mb-3">
  <select class="form-select" maria-label="Default select example" name="tipo_coca">
  <option selected>Elegí tu Coca Cola</option>
  <option value="Original" name="tipo_cocas">Sabor Original</option>
  <option value="Light"  name="tipo_coca">Light</option>
  <option value="Zero Azucar"  name="tipo_coca">Zero azúcar</option>
  <option value="Zero Cherry"  name="tipo_coca">Zero Cherry</option>
  <option value="Light Not Cafeina"  name="tipo_coca">Light sin cafeína</option>
  <option value="Energy"  name="tipo_coca">Energy</option>
  <option value="Energy Not Azucar"  name="tipo_coca">Energy sin azúcares</option>
  <option value="Energy Cherry"  name="tipo_coca">Energy Cherry</option>
</select>
  <label for="exampleFormControlInput1" class="form-label" >envases</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="envases" placeholder="lata, botella plastica, vidrio">
  <label for="exampleFormControlInput1" class="form-label">stock en packs de 6</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="stock">
  <button type="submit"  class="btn btn-outline-primary"> Enviar </button>
</div>
    </form>