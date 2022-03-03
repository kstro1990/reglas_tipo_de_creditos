<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<form class="form-horizontal"  action="controller.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Tipos de creditos</legend>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Corriente (c)</label>
  <div class="col-md-4">
    <select id="C[]" name="C[]" class="form-control" multiple="multiple">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="32">33</option>
		<option value="32">34</option>
		<option value="32">35</option>
		<option value="32">36</option>
    </select>
  </div>
  <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
  <input id="MC" name="MC" type="text"  class="form-control input-md">
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Diferido Corriente (D)</label>
  <div class="col-md-4">
    <select id="D[]" name="D[]" class="form-control" multiple="multiple">
     		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="32">33</option>
		<option value="32">34</option>
		<option value="32">35</option>
		<option value="32">36</option>

    </select>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
  <input id="MD" name="MD" type="text"  class="form-control input-md">
  </div>
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Diferido Plus Pago Total (M)</label>
  <div class="col-md-4">
    <select id="M[]" name="M[]" class="form-control" multiple="multiple">
      		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="32">33</option>
		<option value="32">34</option>
		<option value="32">35</option>
		<option value="32">36</option>

    </select>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
  <input id="MM" name="MM" type="text"  class="form-control input-md">
  </div>
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Diferido propio diners (P)</label>
  <div class="col-md-4">
    <select id="P[]" name="P[]" class="form-control" multiple="multiple">
    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
    </select>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
    <input id="MP" name="MP" type="text"  class="form-control input-md">
  </div>
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Plan pago especial (X)</label>
  <div class="col-md-4">
    <select id="X[]" name="X[]" class="form-control" multiple="multiple">
      		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="32">33</option>
		<option value="32">34</option>
		<option value="32">35</option>
		<option value="32">36</option>

    </select>
  </div>
  <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
  <input id="MX" name="MX" type="text"  class="form-control input-md">
  </div>
</div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="corriente">Diferido preferente (L)</label>
  <div class="col-md-4">
    <select id="L[]" name="L[]" class="form-control" multiple="multiple">
    <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
    </select>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">M&iacute;nimo</label>
  <div class="col-md-4">
    <input id="DPF" name="DPF" type="text"  class="form-control input-md">
  </div>
</div>
</div>



<input type="submit" value="Crear tipos de credito">
</fieldset>
</form>
