
                    

                    var mainHeading = document.getElementById('main-header'); 
                      
                    var listener = function (event) {
                        mainHeading.innerHTML = "JavaScript is Cool!";
                      }
                        document.getElementById('btn1').addEventListener('click', listener, false);
                    
                    var subHeader = document.getElementById('sub-header');
                    
                    var listener = function (event) {
                        subHeader.style['color'] = 'blue';
                    }
                        document.getElementById('btn2').addEventListener('click', listener, false);
                    
                    var listItems = document.getElementsByTagName('li');

                    var listener = function (event) {
                    
                        for (var i = 0; i < listItems.length; i++) {
                                   
                            if (i % 2 == 0) {
                              listItems[i].style['color'] = 'grey';
                            }

                            var dbId = listItems[i].attributes['data-dbid'].value;

                            if (dbId == "1")  {          
                              listItems[0].style['color'] = 'blue';
                            }
                        }
                    }
                        document.getElementById('btn3').addEventListener('click', listener, false);
                    
                    var subParagraphs = document.getElementsByClassName('sub-paragraph');

                    var listener = function (event) {
                        subParagraphs[0].innerHTML = "Mission Accomplished!";
                      }
                        document.getElementById('btn4') .addEventListener('click', listener, false);

