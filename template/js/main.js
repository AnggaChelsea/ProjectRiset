const intro = introJs();

function introbtn(){
	
intro.setOption({
	steps:[
	 	{
	 		intro: 'Selamat Datang Di Web Pemetaan Sekolah dan Kabar Terbaru tentang sekolah terutama di Kabupaten Sukabumi';
		},
		{
			element: '#step-one',
			intro: 'Untuk Melihat Peta, Haraf Daftar dulu terlebih dahulu jikalau sudah daftar bisa langsung Login',
		},
	]
});

}


intro.start();