from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

service = Service(r"C:\xampp\htdocs\project-test\tests\selenium\chromedriver.exe")
driver = webdriver.Chrome(service=service)

driver.get("http://localhost/project-test/src/mpesa.php")
time.sleep(1)

driver.find_element(By.ID, "valor").send_keys("100")
driver.find_element(By.ID, "codigo").send_keys("1234")
driver.find_element(By.ID, "btnMpesa").click()

time.sleep(1)
resultado = driver.find_element(By.ID, "resultado").text
print("Resultado:", resultado)

if "Levantamento aprovado" in resultado:
    print("TESTE PASSOU")
else:
    print("TESTE FALHOU")

driver.quit()