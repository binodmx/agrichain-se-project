<div>
<form>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
      <div class="col-sm-10">
        <input class="form-control-plaintext" id="staticEmail" type="text" readonly="" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="email" placeholder="Enter email">
      <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Example select</label>
      <select class="form-control" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect2">Example multiple select</label>
      <select class="form-control" id="exampleSelect2" multiple="">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file">
      <small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
    </div>
    <fieldset class="form-group">
      <legend>Radio buttons</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input name="optionsRadios" class="form-check-input" id="optionsRadios1" type="radio" checked="" value="option1">
          Option one is this and that—be sure to include why it's great
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input name="optionsRadios" class="form-check-input" id="optionsRadios2" type="radio" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="form-check disabled">
      <label class="form-check-label">
          <input name="optionsRadios" disabled="" class="form-check-input" id="optionsRadios3" type="radio" value="option3">
          Option three is disabled
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend>Checkboxes</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" checked="" value="">
          Option one is this and that—be sure to include why it's great
        </label>
      </div>
      <div class="form-check disabled">
        <label class="form-check-label">
          <input disabled="" class="form-check-input" type="checkbox" value="">
          Option two is disabled
        </label>
      </div>
    </fieldset>
    <button class="btn btn-primary" type="submit">Submit</button>
  </fieldset>
</form>
</div>