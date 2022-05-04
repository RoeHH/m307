<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage</title>
</head>
<body>
    <h1>Garage</h1>
    <?php
        $horses = [
            new horse("Bella", "black"),
            new horse("Dave", "red"),
        ]
        foreach ( $horses as $horse ) {
            	echo '<div class="🐴 animate">
                    <div class="front-leg right">
                        <div class="shoulder">
                            <div class="upper">
                                <div class="knee">
                                    <div class="lower">
                                        <div class="ankle">
                                            <div class="foot">
                                                <div class="hoof"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="back-leg right">
                        <div class="top">
                            <div class="thigh">
                                <div class="lower-leg">
                                    <div class="foot">
                                        <div class="hoof"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tail">
                        <div class="nub">
                            <div class="section">
                            <div class="section">
                            <div class="section">
                            <div class="section">
                            <div class="section">
                            <div class="section last">
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="section">
                        <div class="section">
                        <div class="section">
                        <div class="section">
                        <div class="section last">
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="back-side"></div>
                    </div>
                    
                    <div class="neck">
                        <div class="under"></div>
                        <div class="front"></div>
                        <div class="base"></div>
                        <div class="top"></div>
                        <div class="shoulder"></div>
                    </div>
                    <div class="front-leg left">
                        <div class="shoulder">
                            <div class="upper">
                                <div class="knee">
                                    <div class="lower">
                                        <div class="ankle">
                                            <div class="foot">
                                                <div class="hoof"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="back-leg left">
                        <div class="top">
                            <div class="thigh">
                                <div class="lower-leg">
                                    <div class="foot">
                                        <div class="hoof"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="head">
                        <div class="skull"></div>
                        <div class="nose"></div>
                        <div class="face"></div>
                        <div class="lip"></div>
                        <div class="jaw"></div>
                        <div class="chin"></div>
                        <div class="ear"></div>
                        <div class="eye"></div>
                    </div>
                </div>	
            ';
            
        }
    ?>
</body>
</html>