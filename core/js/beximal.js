var BeximalJS = new Object();
BeximalJS.HexCharts = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"];
BeximalJS.DecToHex = function(number){
    var rem1 = number % 16
    var ans = BeximalJS.HexCharts[rem1-1];
     var rem2 = Math.round(number/16) % 16;
     ans += BeximalJS.HexCharts[rem2-1];
    return ans;
};