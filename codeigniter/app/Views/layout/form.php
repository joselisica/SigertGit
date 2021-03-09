<form class="formSigert row" style="width:100%;" action="" method="POST">
                    <div class="col col-12 col-lg-4 mt-5">
                    Gerne unterbreiten wir Ihnen ein spezielles Angebot!<br><br>
                    Zudem haben Sie die Möglichkeit die EM-Spielpläne auch komplett in Ihrem Design drucken zu lassen. Nehmen Sie diesbezüglich einfach Kontakt zu uns auf.<br><br>
                    Diverse Individualisierungen sind möglich. Wir beraten Sie gerne und freuen uns auf Ihre Anfrage!
                    </div>
                        <div class="col col-12 col-lg-4 mt-5">
                        <div class="form-group">
                            <label for="selectOne">Produktauswahl</label>
                            <select class="form-control formSigert <?= $validation->hasError('selectOne') ? 'errorForm' : '' ?>" name="selectOne" id="selectOne">
                                <option value="Alle"> Alle Produkte </option>
                                <option value="Wandplaner" <?php echo set_select('selectOne', 'Wandplaner'); ?>>Wandplaner</option>
                                <option value="Tischplaner" <?php echo set_select('selectOne', 'Tischplaner'); ?>>Tischplaner</option>
                                <option value="Pocketplaner" <?php echo set_select('selectOne', 'Pocketplaner'); ?>>Pocketplaner</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Anzahl</label>
                            <input type="number" class="form-control formSigert <?= $validation->hasError('anzahl') ? 'errorForm' : '' ?>" name="anzahl" id="anzahl" placeholder="" value="<?php echo set_value('anzahl'); ?>">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('name') ? 'errorForm' : '' ?>" name="name" id="name" placeholder="" value="<?php echo set_value('name'); ?>">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="inputFirma">Firma</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('firma') ? 'errorForm' : '' ?>" name="firma" id="inputFirma" aria-describedby="firmaHelp" placeholder="" value="<?php echo set_value('firma'); ?>">
                            <!-- <small name="" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="inputStrasse">Straße / Nr.</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('strasse') ? 'errorForm' : '' ?>" name="strasse" id="inputStrasse" aria-describedby="strasseHelp" placeholder="" value="<?php echo set_value('strasse'); ?>">
                            <!-- <small name="" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="inputPLZ">PLZ / Ort</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('plz') ? 'errorForm' : '' ?>" name="plz" id="inputPLZ" aria-describedby="plzHelp" placeholder="" value="<?php echo set_value('plz'); ?>">
                            <!-- <small name="" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="inputTelefon">Telefon</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('telefon') ? 'errorForm' : '' ?>" name="telefon" id="inputTelefon" aria-describedby="telefonHelp" placeholder="" value="<?php echo set_value('telefon'); ?>">
                            <!-- <small name="" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">E-Mail (geschäftlich)</label>
                            <input type="text" class="form-control formSigert <?= $validation->hasError('email') ? 'errorForm' : '' ?>" name="email" id="inputEmail" aria-describedby="emailHelp" placeholder="" value="<?php echo set_value('email'); ?>">
                            <!-- <small name="" id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                            <div class="btn-container submitDiv d-none d-lg-block btnHoch">  
                                <span class="ecke-L d-none d-lg-block"></span>
                                <button type="submit" class="btn-submitSigert d-none d-lg-block">anfragen</button>
                                <span class="ecke-R d-none d-lg-block"></span>
                            </div> 
                        </div>
                        <div class="col col-12 col-lg-4 mt-5">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ihre Nachricht</label>
                            <textarea class="form-control formSigert" name="nachricht" id="exampleFormControlTextarea1" rows="6"><?php echo set_value('nachricht'); ?></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input <?= $validation->hasError('check1') ? 'errorForm' : '' ?>" type="checkbox" value="1" id="check1" name="check1">
                            <label class="form-check-label <?= $validation->hasError('check1') ? 'errorText' : '' ?>" for="check1">
                            Durch Bestätigung willigen Sie in die Übermittlung und Speicherung der im Kontaktformular angegebenen Daten zum Zweck der Kontaktbearbeitung ein. 
                            Die Einwilligung ist notwendig zur Nutzung des Kontaktformulars. Sie haben das Recht, Ihre Einwilligung jederzeit zu widerrufen. 
                            Nähere Informationen finden Sie hier: <a href="https://www.sigert.de/datenschutzerklaerung.html" target="_blank">Datenschutzerklärung</a>
                            </label>
                        </div>
                            <div class="btn-container submitDiv d-md-none mt-3 btnLang">  
                                <span class="ecke-L d-lg-none"></span>
                                <button type="submit" class="btn btn-primary btn-submitSigert d-lg-none">anfragen</button>
                                <span class="ecke-R d-lg-none"></span>
                            </div> 
                        </div>
                    </form>
