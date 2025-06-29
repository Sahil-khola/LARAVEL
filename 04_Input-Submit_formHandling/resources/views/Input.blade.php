<center>
     <form action="input" method="post">
@csrf
     <div class="input-warpper">
          <input type="text" name="name" id="name" placeholder="Enter Name">
     </div>

     <div class="input-warpper">
          <input type="email" name="email" id="name" placeholder="Enter Email">
     </div>

     <div class="input-warpper">
          <input type="text" name="city" id="name" placeholder="Enter City">
     </div>

     <div class="input-warpper">
          <button>Submit</button>
     </div>

</form>
</center>

<style>
     input{
          height: 35px;
          width: 200px;
          color: orange;
          border: 2px solid black;
          padding: 10px;
          border-radius: 4px;
          text-align: center

     }
   div{
          margin: 10px;
   }
   button{
          height: 35px;
          width: 200px;
          color: white;
          background-color: blue;
          border: 2px solid black;
          padding: 10px;
          border-radius: 4px;
          cursor: pointer;
   }
</style>