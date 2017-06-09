<!DOCTYPE= html>
<html lang="en"
    <head>
        <title>Laravel</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
				
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

			.container2 {
				
				padding: 5%;
				margin: auto;
				background: #FFF;
				color: #000;
				align: center;
				box-shadow: 0 1px 2px 0 rgba(237,248,255,1), 0 1px 8px 0 rgba(0,0,0,0.1);
							
			}
			
			
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
				
            }

            .quote {
                font-size: 24px;
            }
			
			
			
			
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Name Challenge</div>
					<div class="container2">
						<form action="store" method="post">
							<label for="name">Name</label>
							<input type="text" name="" value=""><br><br>
							<label for="email">Email</label>
							<input type="text" name="" value="">
							<label for=""></label><br><br>
							<input type="submit" name="submit" value="submit">
						</form>
					</div>	
				</div>
    </body>
</html>
