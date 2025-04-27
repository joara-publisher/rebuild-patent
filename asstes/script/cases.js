// Document ready
$(() => {
  // 검색어 입력 후 엔터키 입력 시 처리
  $(".ipt").on("keypress", (e) => {
    if (e.key === "Enter") {
      getList();
    }
  });
  
  // 검색 버튼 클릭 시 처리
  $(".searchBtn").on("click", () => {
    getList();
  });

	// 탭 클릭 시 처리
  $(".tabContainer button").on("click", (event) => {
    getTagList(event.target.value);
  });
});

// 검색 버튼 클릭 시 목록 출력
const getList = () => {
  const searchText = $(".ipt").val();
  let tags = "";

  $(".tabBtnList button").each((index, item) => {
    if ($(item).hasClass("active")) {
      tags = $(item).val();
    }
  });

  location.href = "/cases?searchText=" + searchText + "&tags=" + tags;
};

// 탭 클릭 시 목록 출력
const getTagList = (tagValue) => {
  const searchText = $(".ipt").val();
  const tags = tagValue;

  location.href = "/cases?searchText=" + searchText + "&tags=" + tags;
};
