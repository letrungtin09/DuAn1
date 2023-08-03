// CODE TẠO BIỂU ĐỒ

    // Lấy tất cả các hàng
    var listCourse = document.querySelectorAll('.table-hover tbody tr');
    // Mảng chứa dữ liệu cho biểu đồ
    var chartData = [];
    // Lặp và tìm đến tên khóa học, số lượng khóa học
    for (row of listCourse) {
        var nameCourse = row.querySelector('.name-course').textContent;
        var soLuongCourse = parseInt(row.querySelector('.so-luong').textContent);
        chartData.push({ nameCourse, soLuongCourse });
    }
    // Hàm để tạo màu sắc ngẫu nhiên
    function generateRandomColors(numColors) {
        const colors = [];
        for (let i = 0; i < numColors; i++) {
            const randomColor = `rgb(${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)}, ${Math.floor(Math.random() * 256)})`;
            colors.push(randomColor);
        }
        return colors;
    }
    // Tạo mảng màu sắc ngẫu nhiên cho các phần tử trong biểu đồ
    const numColors = chartData.length;
    const backgroundColors = generateRandomColors(numColors);
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: chartData.map(item => item.nameCourse),
            datasets: [{
                label: 'Số lượng khóa học',
                data: chartData.map(item => item.soLuongCourse),
                backgroundColor: backgroundColors,
                hoverOffset: 4,
                borderWidth: 1
            }]
        },
    });