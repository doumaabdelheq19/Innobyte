const { app, BrowserWindow } = require('electron');

let mainWindow;

function createWindow() {
  mainWindow = new BrowserWindow({
    width: 800,
    height: 600,
    webPreferences: {
      nodeIntegration: true,
    },
  });

  mainWindow.loadFile('path/to/your/index.php');

  mainWindow.on('closed', function () {
    mainWindow = null;
  });
}

app.whenReady().then(createWindow);

app.on('window-all-closed', function () {
  if (process.platform !== 'darwin') app.quit();
});

app.on('activate', function () {
  if (mainWindow === null) createWindow();
});









       
        function isOnline() {
            return navigator.onLine;
        }

    
        function submitData() {
           
            const formData = new FormData(document.getElementById('dataForm'));
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            if (isOnline()) {
                // If online, send data to the server
                sendDataToServer(data);
            } else {
                // If offline, store data locally
                storeDataLocally(data);
                alert("Data stored locally. It will be synchronized when the connection is restored.");
            }
        }

        // Function to send data to the server
        function sendDataToServer(data) {
            // Use XMLHttpRequest, Fetch API, or any other method to send data to the server
            fetch('process_data.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => response.json())
            .then(result => {
                console.log('Server response:', result);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

        // Function to store data locally
        function storeDataLocally(data) {
            // Use localStorage, IndexedDB, or any other method to store data locally
            const offlineData = JSON.parse(localStorage.getItem('offlineData')) || [];
            offlineData.push(data);
            localStorage.setItem('offlineData', JSON.stringify(offlineData));
        }
    


