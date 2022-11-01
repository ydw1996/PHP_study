<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $blogID = $_GET['blogID'];

    $blogSql = "SELECT * FROM myBlog WHERE blogID = '$blogID'";
    $blogResult = $connect -> query($blogSql);
    $blogInfo = $blogResult -> fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../include/head.php"   ?>
</head>
<body>

<div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->
<?php include "../include/header.php"   ?>

<main id="main">
<section id="blog" class="container section">
            <div class="blog__inner">
                <div class="blog__title" style="background-image:url(../assets/img/blog/<?=$blogInfo['blogImgFile']?>)">
                    <span class="cate"><?=$blogInfo['blogCategory']?></span>
                    <h3 class="title"><?=$blogInfo['blogTitle']?></h3>
                    <div class="info">
                        <span><?=$blogInfo['blogAutor']?></span>
                        <span><?=date('Y-m-d', $blogInfo['blogRegTime'])?></span>
                        <div class="modify">
                            <span>수정</span>
                            <span>삭제</span>
                        </div>
                    </div>
                </div>
                <div class="blog__contents">
                    토스의 페이테크(Paytech) 계열사 토스페이먼츠(대표 ‘김민표’)가 아마존웹서비스 코리아(이하 ‘AWS’)와 손잡고 이커머스 스타트업 대상 첫 웨비나를 개최한다고 12일 밝혔다.<br><br>
                    이번 웨비나는 ‘이커머스 스타트업의 결제전환율 개선과 결제 외 솔루션 활용을 통한 기업 성장’을 주제로, 코로나19를 기점으로 빠르게 성장 중인 이커머스 스타트업의 고객 관계 강화 및 추가 매출 기회 창출을 돕기 위해 마련되었다.<br><br>

                    토스페이먼츠는 자사의 결제 솔루션 도입 및 컨설팅 서비스를 제공 받아 매출을 향상시킨 기존 이커머스 가맹점 사례를 공유한다.<br><br>

                    특히, ▲ 가맹점의 브랜드 디자인 및 유저 인터페이스(UI)에 최적화할 수 있는 간편 결제 솔루션 ‘브랜드페이’ 구축 사례 ▲ 가맹점 브랜드 제휴 상업자 표시 카드(PLCC)와 간편 결제 솔루션 연계를 통한 고객 마케팅 사례 등이 구체적으로 소개될 예정이다.<br><br>

                    결제 부문 외에 사업자에게 꼭 필요한 통신판매 등록, 호스팅, 마케팅 및 파이낸싱 등 토스페이먼츠가 제공하는 다양한 솔루션도 확인할 수 있다. 또한, 고객의 쇼핑 경험 향상을 위해 AWS 서비스를 이용하여 대규모 트래픽이 발생하는 마케팅 행사에 유연하게 대응하는 방법과, 머신러닝을 이용한 맞춤형 제품 추천, 라이브 커머스 구현 사례에 대해 선보이게 된다.<br><br>
                    slice() 메서드는 문자열에서 원하는 값을 추출하여 새로운 문자열을 반환합니다.<br>
                    substring() 메서드는 문자열에서 원하는 값을 추출하여 새로운 문자열을 반환합니다.<br>
                    substr() 메서드는 문자열에서 원하는 값을 추출하여 새로운 문자열을 반환합니다.<br>
                    split() 메서드는 문자열을 부분 문자열로 구분하고 배열로 반환합니다.<br>
                    replace() 메서드는 문자열에서 특정 문자열을 교체하여 새로은 문자열을 반환합니다.<br>
                    replaceAll() 메서드는 문자열에서 모든 특정 문자열을 교체하여 새로은 문자열을 반환합니다.<br>
                    concat() 메서드는 둘 이상의 문자열을 결합하여 새로운 문자열을 반환합니다.<br>
                    repeat() 메서드는 문자열을 복사하여, 복사한 새로운 문자열을 반환합니다.<br>
                    padStart() 메서드는 주어진 길이에 맞게 앞 문자열을 채우고, 새로운 문자열을 반환합니다.<br>
                    padEnd() 메서드는 주어진 길이에 맞게 뒤 문자열을 채우고, 새로운 문자열을 반환합니다.<br>
                    trim() 메서드는 문자열의 앞뒤 공백을 제거하고, 새로운 문자열을 반환합니다.<br>
                    trimStart() 메서드는 문자열의 앞 공백을 제거하고, 새로운 문자열을 반환합니다.<br>
                    trimEnd() 메서드는 문자열의 뒤 공백을 제거하고, 새로운 문자열을 반환합니다.<br>
                    toUpperCase() 메서드는 문자열을 대문자로 설정하고, 새로운 문자열을 반환합니다.<br>
                    toLowerCase() 메서드는 문자열을 소문자로 설정하고, 새로운 문자열을 반환합니다.<br>
                    toString() 메서드는 데이터를 문자열로 변환하고, 새로운 문자열을 반환합니다.<br>
                </div>  
                <div class="blog__aside">
                    <div class="aside__intro">
                        <div class="img">
                            <img src="assets/img/banner_bg01.jpg" alt="배너 이미지">
                        </div>
                        <div class="desc">
                            어떤 일이라도 <em>노력</em>하고 즐기면 그 결과는 <em>빛</em>을 바란다고 생각합니다.
                        </div>
                    </div>
                    <article class="aside__cate">
                        <h3>카테고리</h3>
                        <?php include "../include/category.php" ?>
                    </article>
                    <article class="aside__cate">
                        <h3>최신 글</h3>
                        <!-- <?php include "../include/newBlog.php" ?> -->
                    </article>
                    <article class="aside__cate">
                        <h3>인기 글</h3>
                        <!-- <?php include "../include/popBlog.php" ?> -->
                    </article>
                    <article class="aside__cate">
                        <h3>최신 댓글</h3>
                        <!-- <?php include "../include/newComment.php" ?> -->
                    </article>
                </div>
                <div class="blog__article">
                    <h3>관련글</h3>
                    <article class="card__wrap">
                        <div class="card__inner">
                            <div>
                                <figure>
                                    <img src="assets/img/card_bg01.jpg" alt="vscode에 scss설치하기">
                                    <a href="blogView.html" class="go" title="컨텐츠 바로가기">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div>
                                    <h3>vscode에 scss설치하기</h3>
                                    <p>먼저 확장 프로그램에서 scss를 설치합니다. sass와 scss는 같지만 쓰는 방법이 살짝 틀립니다.</p>
                                </div>
                            </div>
                            <div>
                                <figure>
                                    <img src="assets/img/card_bg02.jpg" alt="vscode에 scss설치하기">
                                    <a href="blogView.html" class="go" title="컨텐츠 바로가기">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div>
                                    <h3>vscode에 scss설치하기</h3>
                                    <p>먼저 확장 프로그램에서 scss를 설치합니다. sass와 scss는 같지만 쓰는 방법이 살짝 틀립니다.</p>
                                </div>
                            </div>
                            <div>
                                <figure>
                                    <img src="assets/img/card_bg03.jpg" alt="vscode에 scss설치하기">
                                    <a href="blogView.html" class="go" title="컨텐츠 바로가기">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646447 8.64645C0.451184 8.84171 0.451184 9.15829 0.646447 9.35355C0.841709 9.54882 1.15829 9.54882 1.35355 9.35355L0.646447 8.64645ZM9.5 1C9.5 0.723858 9.27614 0.5 9 0.5L4.5 0.5C4.22386 0.5 4 0.723858 4 1C4 1.27614 4.22386 1.5 4.5 1.5L8.5 1.5L8.5 5.5C8.5 5.77614 8.72386 6 9 6C9.27614 6 9.5 5.77614 9.5 5.5L9.5 1ZM1.35355 9.35355L9.35355 1.35355L8.64645 0.646447L0.646447 8.64645L1.35355 9.35355Z" fill="white"/>
                                        </svg>
                                    </a>
                                </figure>
                                <div>
                                    <h3>vscode에 scss설치하기</h3>
                                    <p>먼저 확장 프로그램에서 scss를 설치합니다. sass와 scss는 같지만 쓰는 방법이 살짝 틀립니다.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
</main>
    <!-- //main -->

<?php include "../include/footer.php"   ?>
    
</body>
</html>