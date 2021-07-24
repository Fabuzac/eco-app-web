<html style="background-color: #000">
    <body>   
        <style>
            .input {

                margin-top: 20%;
                margin-left: 35%;
            }
            textarea{
                font-size: 3em;
                background: #000;
                border: none;
                color: rgb(20, 255, 0);
                font-family: sans-serif;                
            }
        </style>

        <form class="input" action="" method="POST">
            @csrf
            <textarea 
            class="width-100 textarea border-none" 
            name="body" 
            placeholder="Who are you?"
            required
                
        ></textarea>
          
        </form>
    </body>
</html>