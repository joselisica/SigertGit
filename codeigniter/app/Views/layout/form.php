<form class="formSigert" action="" method="POST">
                    <div class="col col-12 col-lg-4">
                    Gerne unterbreiten wir Ihnen ein spez- ielles Angebot!<br><br>
                    Zudem haben Sie die Möglichkeit die EM-Spielpläne auch komplett in Ihrem Design drucken zu lassen. Nehmen Sie diesbezüglich einfach Kontakt zu uns auf.<br><br>
                    Diverse Individualisierungen sind möglich. Wir beraten Sie gerne. Wir freuen uns auf Ihre Anfrage!
                    </div>
                        <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label for="selectOne">Produktauswahl</label>
                            <select class="form-control formSigert <?= $validation->hasError('selectOne') ? 'errorForm' : '' ?>" name="selectOne" id="selectOne">
                                <option value=""> Alle Produkte </option>
                                <option value="test1">1</option>
                                <option value="test2">2</option>
                                <option value="test3">3</option>
                                <option value="test4">4</option>
                                <option value="test5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="selectTwo">Produktauswahl</label>
                            <select class="form-control formSigert <?= $validation->hasError('selectTwo') ? 'errorForm' : '' ?>" name="selectTwo" id="selectTwo">
                                <option value=""> Alle Produkte </option>
                                <option value="test1-2">1</option>
                                <option value="test2-2">2</option>
                                <option value="test3-2">3</option>
                                <option value="test4-2">4</option>
                                <option value="test5-2">5</option>
                            </select>
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
                            <div class="btn-container submitDiv d-none d-lg-block">  
                                <span class="ecke-L d-none d-lg-block"></span>
                                <button type="submit" class="btn-submitSigert d-none d-lg-block">anfragen</button>
                                <span class="ecke-R d-none d-lg-block"></span>
                            </div> 
                        </div>
                        <div class="col col-12 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ihre Nachricht</label>
                            <textarea class="form-control formSigert" name="nachricht" id="exampleFormControlTextarea1" rows="6"><?php echo set_value('nachricht'); ?></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input <?= $validation->hasError('check1') ? 'errorForm' : '' ?>" type="checkbox" value="1" id="check1" name="check1">
                            <label class="form-check-label" for="check1">
                            Rum eumqui utemped modit quis etur, comnihi cienditasit, sam, to to omnisquas nobit er-natur, si aute vollest iliquias et.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input <?= $validation->hasError('check2') ? 'errorForm' : '' ?>" type="checkbox" value="1" id="check2" name="check2">
                            <label class="form-check-label" for="check2">
                            Rum eumqui utemped modit quis etur, comnihi cienditasit, sam, to to omnisquas nobit er-natur, si aute vollest iliquias et.
                            </label>
                        </div>
                            <div class="btn-container submitDiv d-lg-none mt-3">  
                                <span class="ecke-L d-lg-none"></span>
                                <button type="submit" class="btn btn-primary btn-submitSigert d-lg-none">anfragen</button>
                                <span class="ecke-R d-lg-none"></span>
                            </div> 
                        </div>
                    </form>
