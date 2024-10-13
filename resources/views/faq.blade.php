@extends('layouts_main.master')

@section('content')
    <div class="position-relative" id="main">

        @include('layouts_main.inner_main_top', ['page_title' => '常見問答', 'page_title_sub' => 'Faq'])

        <!-- Faq Start -->
        <div class="container-fluid px-md-5 px-4 py-md-4 py-3 mt-3 position-relative overflow-hidden">
            <div class="container">
                <div class="row pt-5 mb-lg-3 mb-5 justify-content-center align-items-center" id="pg-faq">
                    <div class="col-lg-auto">
                        <!-- <h5 class="pg-case-title text-start mb-0"></h5> -->
                        <p class="w-100 text-center mb-0" style="line-height: 1.8rem;">
                            聯大當鋪了解您在借款過程中可能會有各種疑問。<br>
                            以下是我們精心整理的常見問題與解答，幫助您更清楚了解我們的服務，若您還有其他疑問也可隨時透過LINE或來電與我們聯繫！
                        </p>
                    </div>

                </div>

                <div class="row justify-content-center align-items-start my-5">

                    <div class="faq-contact-box py-4 px-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-2 col-md-3 position-relative text-center">
                                <img src="{{ asset('assets/img/06/06illu.png') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-auto col-md-7">
                                <h5>使用LINE專人服務線上免費諮詢超方便！</h5>
                                <p class="mb-0">手機點選LINE免費諮詢按鈕或輸入LINE官方帳號（ID）<span>0286632299</span>，即可加入好友詢問！</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center align-items-center ">
                    <!-- mt-5 mx-lg-4 mx-3 mb-lg-5 mb-3 -->

                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q1.</span>借款需要什麼條件？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們的借款條件相對寬鬆，只要您年滿20歲，擁有合法有效的證件和符合條件的質押物品，即可申請借款。無論是個人還是公司戶，均可辦理。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q2.</span>借款需要哪些文件？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    根據借款類型和質押物品，您可能需要提供以下文件：
                                <ol>
                                    <li>身分證正本（雙證件）</li>
                                    <li>質押物品相關證明文件（如行照、所有權狀等）</li>
                                    <li>其他補充資料（如銀行存摺、公司營利事業登記證等）</li>
                                </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q3.</span>如果提前還款，會有違約金嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    在聯大當舖提前還款沒有違約金，您可以根據需要隨時提前還款，僅需支付實際使用天數的利息。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q4.</span>如果無法按時還款，會有什麼後果？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們建議您提前與我們溝通，我們將協助您制定合理的還款計劃。如果無法按時還款，可能會對您的信用產生影響，並且質押物品可能會被處理以償還借款。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q5.</span>如何確保我的質押物品安全？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    聯大當舖對所有質押物品進行專業保管和保險，確保您的質押物品安全無虞。每件質押物品均有專業保管措施，並會定期檢查和維護。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q6.</span>是否可以在線上辦理借款？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    目前，您可以透過我們的官方 Line 或電話進行初步諮詢和申請，具體的資料提交和合同簽訂需要親臨本公司辦理。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q7.</span>什麼是質押借款？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    質押借款是指您將具有價值的物品（如黃金、珠寶、名錶等）抵押給我們，獲得相應金額的貸款。在您償還貸款後，我們將退還您的質押物品。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q8.</span>我可以借到多少錢？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    借款金額取決於您所質押物品的價值。我們的專業團隊將對您的質押物品進行評估，並根據評估價值確定最高可借額度。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q9.</span>借款審核需要多久？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們的借款審核過程快速高效，通常在您提交所有必要文件後，我們會在短時間內完成審核並告知您結果。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q10.</span>如何計算利息？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    利息根據您的借款金額、期限及選擇的計息方式來計算。具體利率將在合同中明確，您可以選擇按日計息或按月計息。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q11.</span>質押物品是否會被出售？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    只要您按時償還貸款，您的質押物品將不會被出售。我們將妥善保管您的質押物品，並在您還清貸款後退還。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q12.</span>是否需要信用查核？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們對借款人的信用狀況進行基本查核，但即使有信用瑕疵，也不會影響您的借款申請。我們更注重質押物品的價值。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q13.</span>可以申請多筆借款嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    是的，您可以同時申請多筆借款，只要您擁有足夠的質押物品且每筆借款都符合我們的審核標準。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q14.</span>借款合同期滿可以延長嗎？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    如果您需要延長借款合同期限，請提前與我們聯繫。我們將根據您的具體情況，考慮是否延長合同期限。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q15.</span>還款是否有提醒？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    我們會在還款日期前提醒您，確保您不會遺漏任何還款期限。您可以選擇多種還款提醒方式，如短信、電話等。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q16.</span>如何查詢借款進度和剩餘還款額？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    您可以隨時聯繫我們的客服團隊查詢您的借款進度和剩餘還款額。我們也將提供便捷的查詢方式，讓您隨時掌握您的借款情況。<br>
                                    如果您有其他問題或需要進一步了解，請隨時聯繫我們的客服團隊。我們將竭誠為您解答，確保您在聯大當舖獲得最專業、最貼心的服務！
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q17.</span>借款過程中是否會影響我的信用紀錄？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    聯大當舖的質押借款主要依賴於質押物品的價值，並不會直接影響您的個人信用紀錄。我們不會將您的借款紀錄報告給信用機構，因此不會對您的信用分數造成負面影響。然而，如果您無法按時還款，且未與我們達成其他還款安排，可能會影響您在我們當舖的借款記錄，並影響未來的借貸申請。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q18.</span>聯大當舖是否提供緊急借款服務？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    是的，聯大當舖提供緊急借款服務，專為急需資金的客戶設計。在您提交必要的文件並完成質押物品的評估後，我們將優先處理您的借款申請，確保在最短時間內完成審核並撥款。無論是個人還是企業，我們都致力於在緊急情況下提供快速、高效的借款服務，幫助您解決資金周轉的困難。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q19.</span>聯大當舖是否提供針對小型企業的專屬貸款方案？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    是的，聯大當舖提供針對小型企業的專屬貸款方案。我們了解小型企業在資金周轉和擴展業務時的特殊需求，特別設計了靈活的貸款方案來滿足這些需求。無論是設備購置、存貨採購還是其他經營需要，我們的專屬貸款方案都能提供快速審核和靈活還款選項，幫助小型企業順利運營和成長。歡迎小型企業來電諮詢或親臨洽談，我們的專業團隊將為您量身訂製最合適的貸款方案。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="faq-item-box px-3">
                            <div class="faq-item-q d-flex justify-content-between">
                                <h5><span class="text-danger">Q20.</span>聯大當舖是否接受外幣或外國資產作為質押物品？</h5>
                                <span class="faq-item-arrow-d"><i class="bi bi-dash-lg"></i></span>
                                <span class="faq-item-arrow-p d-none"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="faq-item-line"></div>
                            <div class="faq-item-a">
                                <p>
                                    目前聯大當舖主要接受本地資產作為質押物品，包括黃金、珠寶、名錶、汽車、機車、房屋、土地等。對於外幣或外國資產的質押，我們會根據具體情況進行評估。如果您有相關需求，請提前與我們聯繫，我們將為您提供具體的評估和處理方案。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- Faq End -->


    </div>
@endSection
@push('page_scripts')
    <script>
        $(function() {
            $.each($('.faq-item-box'), function(i, v) {
                $(this).find('.faq-item-q').css('cursor', 'pointer');
                $(this).find('.faq-item-q').on('click', function() {
                    $(this).parent().find('.faq-item-a').slideToggle();
                    $(this).find('.faq-item-arrow-p').toggleClass('d-none');
                    $(this).find('.faq-item-arrow-d').toggleClass('d-none');
                })
            })
        })
    </script>
@endpush
