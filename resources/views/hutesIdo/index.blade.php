<x-app-layout>





    <form action="#" method="post">
        <div class="row justify-content-center">
            <div class="col-md-12 col-xs-3 col-xxl-6">
                <div class="card bg-dark text-secondary mb-3">
                    <div class="card-header row">
                        <div class="col-md-12 text-center">
                            <h2 class="card-title">Hűtés díj kalkulátor</h2>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="form-group border border-danger pt-2 mb-2">
                                <p id="title" class="form-label fw-bold text-danger">TELJES HŰTÉSDÍJ: <span id="price_sum"
                                        class="text-secondary fw-normal fst-italic">64 000 Ft
                                    </span>
                                </p>

                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <div class="input-group">
                                    <label 
                                        class="input-group-text bg-secondary border border-secondary fw-bold">Hűtésdíjból
                                        rendezve</label>
                                    <input type="number" class="form-control border-secondary" min="0"
                                        class="input-group-text fst-italic"></input>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-2">
                            <button class="btn btn-success" type="submit">Tovább</button>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="row pt-2 justify-content-center">
                            <div class="col-xs-6 col-md-12 col-xxl-6">
                                <div class="form-group mt-3">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Ügyfélfelvételének
                                            napja</label>
                                        <input id="order_date" type="date" value="2023-12-08" readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                        <span class="input-group-text fst-italic">péntek</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-6 col-xxl-6 col-md-6 ">
                                <div class="form-group mt-3">
                                    <div class="input-group">
                                        <!-- Label and Span inside Input Group Text -->
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Halálozás
                                            dátuma</label>
                                        <!-- Input Field -->
                                        <input id="death_date" type="date" value="2023-12-02" readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                        <!-- Additional Span if needed -->
                                        <span id="death_day" class="input-group-text fst-italic">szombat</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">HvKÉSZ
                                            állapot dátuma</label>
                                        <input id="hv_done_date" type="date" value="2023-12-11" readonly readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                        <span id="hv_done_day" class="input-group-text fst-italic">hétfő</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">HvVAN
                                            állapot dátuma</label>
                                        <input id="hv_van_date" type="date" value="2023-12-12" readonly readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                        <span id="hv_van_day" class="input-group-text fst-italic">kedd</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Hv
                                            Kiállítás időpontja</label>
                                        <input id="hv_kiall" type="date" value="2023-12-12" readonly readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Boncolás
                                            történt-e</label>
                                        <select class="form-select text-center border-secondary bg-secondary">
                                            <option value="yes">Igen</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">KH
                                            választás</label>
                                        <select class="form-select text-center border-secondary bg-secondary">
                                            <option id="kh_nev">KHMária</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 pt-3 ">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">
                                            KREMAválasztás</label>
                                        <select class="form-select text-center border-secondary bg-secondary">
                                            <option id="krema">Adytum Budapest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-x pt-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Eljárás</label>
                                        <select class="form-select text-center border-secondary bg-secondary">
                                            <option>Normál</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="calculator" class="col-md-12 col-xs-12 col-sm-12 pt-2 justify-content-center">
                                <div id="calculator" class="form-group">
                                    <div id="calculator" class="table-responsive">
                                        <div id="calculator"
                                            class="table table-responsive bg-dark border border-secondary rounded">
                                            <table id="calculator" class="table table-dark caption-top">
                                                <caption
                                                    class="border-bottom border-secondary text-uppercase fs-2 text-center text-danger">
                                                    Költségek</caption>
                                                <thead>
                                                    <tr class="table-dark">
                                                        <th scope="col"
                                                            class="bg-dark text-nowrap text-center border-end border-secondary text-uppercase text-secondary w-50">
                                                            KH Átalány 1</th>
                                                        <th scope="col"
                                                            class="bg-dark text-nowrap text-center border-end border-secondary text-uppercase text-secondary w-50">
                                                            <div class="form-group">KH Átalány 2
                                                        </th>
                                                        <th scope="col"
                                                            class="bg-dark text-center border-end border-secondary text-uppercase text-secondary w-50">
                                                            <div class="form-group">PótHűtés
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center align-middle">

                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="atal1_days">5</td>
                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="atal2_days">5</td>
                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="pot_days">1</td>
                                                    </tr>
                                                    <tr class="text-center align-middle">

                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="atal1">55 000 Ft</td>
                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="atal2">15 000 Ft</td>
                                                        <td class="bg-dark border-end border-secondary table-secondary text-secondary text-center w-50"
                                                            id="pot">5 000 Ft</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Hűtésdíj
                                            számolásának első
                                            napja</label>
                                        <input id="cooling_start_date" type="date" value="2023-12-11" readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xs-6 mb-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label id="title"
                                            class="input-group-text bg-secondary border border-secondary fw-bold">Elszállítás
                                            határnap</label>
                                        <input id="transport_date" type="date" value="2023-12-15" readonly
                                            class="form-control text-center bg-secondary border-secondary">
                                        <span class="input-group-text fst-italic">péntek</span>
                                    </div>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Elszállítási határnap</label>
                                    <p class="fst-italic">számolás</p>
                                </div>
                            </div>


                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">KH Hűtött napok száma</label>
                                    <p id="days" class="fst-italic">4</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">KH Átalány 1</label>
                                    <p id="actual_atalany1" class="fst-italic">55 000 Ft</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">KH Átalány 2</label>
                                    <p id="actual_atalany2" class="fst-italic">számolás</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">KH PótHD</label>
                                    <p id="actual_pot" class="fst-italic">számolás</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">HH Shk</label>
                                    <p class="fst-italic">- Ft</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Krema Átalány</label>
                                    <p class="fst-italic">9 000 Ft</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Krema nap</label>
                                    <p class="fst-italic">5 nap</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Visszaszállítás</label>
                                    <p class="fst-italic">2 nap</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Kellékezés</label>
                                    <p class="fst-italic">2 nap</p>
                                </div>
                            </div>
                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Urna Kiszállítás</label>
                                    <p class="fst-italic">2 nap</p>
                                </div>
                            </div>

                            <div  class="col-md-2 col-sm-3 col-xs-3">
                                <div class="form-group">
                                    <label class="form-label fw-bold">Átadás</label>
                                    <p id="atadas" class="fst-italic">2 nap</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </form>
</x-app-layout>
