var myoptions = {
    width: '100%',
    height: '300px',
    language: 'CH', //语言
    showLunarCalendar: true, //阴历
    showHoliday: true, //休假
    showFestival: true, //节日
    showLunarFestival: true, //农历节日
    showSolarTerm: true, //节气
    showMark: true, //标记
    timeRange: {
    startYear: 1949,
    endYear: 2068
},
mark: {
	'2017-4-17': '嘟嘟生日',
    '2017-6-1': '陪宝宝出去玩',
    '2017-6-17': '去陆家玩并看房子',
    '2018-4-16': '而立之年',
},
theme: {
    changeAble: false,
    weeks: {
      backgroundColor: '#FBEC9C',
      fontColor: '#4A4A4A',
      fontSize: '20px',
    },
    days: {
      backgroundColor: '#ffffff',
      fontColor: '#565555',
      fontSize: '24px'
    },
    todaycolor: 'orange',
    activeSelectColor: 'orange',
}
}
var myCalendar = new SimpleCalendar('#calendar',myoptions); 

$(function() {

    $(document).on('click','.sc-festival',function() { //天数格添加点击事件。
        var holiday = $(this).children('.lunar-day').text();
        layer.msg('今日「' + holiday + '」!', {time: 1500});
    });
     $(document).on('click','.sc-mark',function() { //天数格添加点击事件。
        var year = $(".sc-select-year").val(); //获取当前选择年份。
        var month = $(".sc-select-month").val(); //获取当前选择月份。
        var day = $(this).children(".day").html(); //获取当前选择天数。
        var date = year + "-" + month + "-" + day;
        layer.msg('"' + date + '":今天要记得『' + this.title + '』!', {time: 1500});
    });

});
