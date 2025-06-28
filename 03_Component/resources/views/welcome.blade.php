
<x-message
 projectName="Laravel Project"
 projectMessage="This is laravel Project make by Sahil Khola"
 class="container"

/>
<x-message
 projectName="React Project"
 projectMessage="This is React Project make by  Khola"
 class="container"
/>


<x-message
 projectName="vite Project"
 projectMessage="This project have many error plz try again"
 class="error"
/>

<style>
    .container{
        background-color: lightgreen;
        color: black;
        padding: 2px;
        margin: 10px;
    }

    .error{
        background-color: rgb(240, 95, 95);
        color: black;
        padding: 2px;
        margin: 10px;
    }
</style>







{{-- <x-input 
    name="Name" 
    label="Name" 
    type="text" 
    placeholder="Enter your Name" 
/>
<x-input 
    name="email" 
    label="Email Address" 
    type="email" 
    placeholder="Enter your email" 
/>
<x-input 
    name="password" 
    label="Password" 
    type="password" 
    placeholder="Enter your password" 
/> --}}
