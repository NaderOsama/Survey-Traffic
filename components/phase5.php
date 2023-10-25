<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
<style>
      label {
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }

      .questionLabel {
      border-bottom: 1px solid grey !important;
      color: darkslategray;
      font-family: 'Cairo';
      
      }

      .questionForm {
      border-radius: 20px;
      padding: 10px;
      border: 1px solid #0b201c;
      background-color: #f4f6f4;


      }

      .arrowwww::after {
            content: "\25BC";
            display: inline-block;
            margin-left: 10px;
            color: darkred;
            cursor: pointer;
            transition: transform 0.2s;
            font-size: 20px;
            border: 1px solid;
            padding: 10px;
            border-radius: 50px;
        }
      .checkbox-container,
      .radio-container {
      margin-top: 10px;
      }

      input[type="radio"], {
      font-size:25px;
      }
      .selectLabel {
      margin: 20px 0;
      }
</style>

</head>
<body>

<div class="content" id="phase5">
      <h2 class="arrow" id="section5" style="cursor: pointer; direction: ltr;">القسم الخامس: إضافات لما ورد بالاستبيان</h2>
      
      <div class="form-control questionForm">
                  <label for="proposal_1" class="questionLabel">أماكن آخري للزحام:</label>
                  <input type="text" id="proposal_1" name="proposal_1" ><br>
            
                  <label for="proposal_2" class="questionLabel"> أسباب آخري للزحام:</label>
                  <input type="text" id="proposal_2" name="proposal_2" ><br>
            
                  <label for="proposal_3" class="questionLabel">حلول آخري للزحام:</label>
                  <input type="text" id="proposal_3" name="proposal_3" ><br>
      </div>


</div>


</body>
</html>
