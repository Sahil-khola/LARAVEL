<div>
    <form action="Adduser" method="POST">
        @csrf
        <div>
            <p>User Skills : </p>
            <input type="checkbox" name="skills[]" id="Php" value="Php">
            <label for="Php">PHP</label>

            <input type="checkbox" name="skills[]" id="Java" value="Java">
            <label for="Java">Java</label>

            <input type="checkbox" name="skills[]" id="Python" value="Python">
            <label for="Python">Python</label>








            label for="php">PHP</label>
        <input type="checkbox" name="skills[]" id="Php" value="Php">

        <label for="sql">SQL</label>
        <input type="checkbox" name="skills[]" id="sql" value="Sql">

        <label for="Laravel">Laravel</label>
        <input type="checkbox" name="skills[]" id="Laravel" value="Laravel">
        </div>
        </div>

        <div>
            <p>User Gender : </p>
            <input type="radio" name="gender" id="Male" value="Male">
            <label for="Male">Male</label>

            <input type="radio" name="gender" id="Female" value="Female">
            <label for="Female">Female</label>
        </div>
        
        <div>
            <p>City : </p>
            <select name="city" id="city">
                <option value="Delhi">Delhi</option>
                <option value="Noida">Noida</option>
                <option value="Gurgoan">Gurgoan</option>
            </select>
        </div>
        
        <div>
            <p>Age :</p>
            <input type="range" name="Age" id="Age" max="100" min="18">
        </div>

        <button>Submit</button>
    </form>
</div>
</div>
