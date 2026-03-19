from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

service = Service(r"C:\xampp\htdocs\project-test\tests\selenium\chromedriver.exe")
driver = webdriver.Chrome(service=service)

driver.get("http://localhost/project-test/src/login.php")
time.sleep(1)

driver.find_element(By.ID, "email").send_keys("teste@email.com")
driver.find_element(By.ID, "senha").send_keys("senha123")
driver.find_element(By.ID, "btnLogin").click()

time.sleep(1)
resultado = driver.find_element(By.ID, "resultado").text
print("Resultado:", resultado)

if "Login válido" in resultado:
    print("TESTE PASSOU")
else:
    print("TESTE FALHOU")

driver.quit()