@extends("layouts.app")
@section("content")
    <h1 class="humming"> Humming Birds</h1>

    <!--owl carousel-->
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="owl-carousel owl-theme">
                    <div class="item"><h4></h4> <img src="assets/images/redbull.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/Monster_Energy_logo.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/logitechglogo.png"></div>
                    <div class="item"><h4></h4> <img src="assets/images/nike.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/adidas.png"></div>
                    <div class="item"><h4></h4> <img src="assets/images/nvidia.jpg"></div>
                    <div class="item"><h4></h4><img src="assets/images/Sennheiser-Logo.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/intel.png"></div>
                    <div class="item"><h4></h4> <img src="assets/images/visa.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/cococola.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/gillette.png"></div>
                    <div class="item"><h4></h4><img src="assets/images/vodaphone.png"></div>
                </div>
            </div>
        </div>
    </div>
    <!--calendar-->
    <div class="container">
        <div class="row p-3">
            <div class="col-md-12">
                <div class="calendar">
                    <div class="month">
                        <p class="Calendar-title"> June </p>
                        <p class="Calendar-title"> 2021</p>
                    </div>

                    <table>

                        <tr>
                            <th> Sun</th>
                            <th> Mon</th>
                            <th> Tues</th>
                            <th> Wed</th>
                            <th> Thurs</th>
                            <th> Fri</th>
                            <th> Sat</th>

                        </tr>

                        <tr>

                            <td></td>
                            <td></td>
                            <td>1<p></p>
                                <a href="Matches.php">
                                    <div class="myDIV"> Game Day</div>
                                    <div class="hide"> A vs B</div>
                                </a>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11
                                <a href="Matches.php">
                                    <div class="myDIV"> Game Day</div>
                                    <div class="hide">A vs C </div>

                                </a>

                            </td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>13
                                <a href="Matches.php">
                                    <div class="myDIV"> Meet & Greet</div>
                                    <div class="hide"> Time 10:00 - 12:00</div>
                                </a>
                            </td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17
                                <a href="Matches.php">
                                    <div class="myDIV"> Charity Stream</div>
                                    <div class="hide">yeeeet</div>
                                </a>
                            </td>
                            <td>18</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!--        view toggle buttons-->
            <div class="col-md-12">
                <div id="btnContainer">
                    <button class="btn list-view_btn"><i class="fa fa-bars"></i> List</button>
                    <button class="btn grid-view_btn"><i class="fa fa-th-large"></i> Grid</button>
                    <button class="btn masonry-view_btn"><i class="fa fa-th-large"></i> Masonary</button>
                </div>
            </div>
            <!--        //grid system//-->
            <div class="masonry">
                <div class="row">
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Counterstrike News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Counterstrike News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Counter Strike News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Rocket League News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Rocket League News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Rocket League News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Valorant News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Valorant News </h5>
                    </div>
                    <div class="view-toggle grid-view col-md-3">
                        <h5> Valorant News </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--page pagination-->
    <div class="pagination_section">
        <!--    <a href="#"><< Previous</a>-->
        <a href="#" title=""> 1 </a>
        <a href="#" title=""> 2 </a>
        <a href="#" title=""> 3 </a>
        <a href="#" title="" class="active"> 4 </a>
        <a href="#" title=""> 5 </a>
        <a href="#">Next >></a>
    </div>


@endsection
