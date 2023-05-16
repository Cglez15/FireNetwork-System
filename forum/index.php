<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>

  <style>
    body {
  font-family: Arial Black, sans-serif;
  background-color: #EDFFF9;
}

.container {
  max-height: 2000px;
  margin: 0 auto;
}

.panel {
  display: inline-block;
  border-radius: 0px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  margin-bottom: 30px;
}

.panel-heading {
  background-color: #fff;
  border-radius: 10px 10px 0 0;
  padding: 20px;
}

.panel-body {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.table {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  width: calc(50% - 15px);
  margin-bottom: 30px;
}

.table:last-child {
  width: calc(50% - 15px);
  height: 400px;
}

.btn-primary {
  background-color: #55C138;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  color: #fff;
  font-weight: bold;
}

.btn-primary:hover {
  background-color: #0069d9;
  cursor: pointer;
}

label {
  font-weight: bold;
}

.close {
  font-size: 30px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  opacity: 0.2;
}

.close:hover {
  opacity: 0.5;
  cursor: pointer;
}
.table-left {
  width: calc(100% - 30px);
  margin: 0 auto; /* Agregamos esta propiedad para centrar la tabla */
}
.right-table {
  border: 1px solid #ccc;
  border-radius: 10px;
  height: 300px;
  width: 300px;
  overflow: auto;
}


  </style>

</head>

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default table-left">
  <div class="panel-body">         
    <table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
      <tbody id="record">
        
      </tbody>
    </table>
  </div>
</div>



</div>

</body>
</html>