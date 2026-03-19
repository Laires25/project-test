from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By
import time

print("A abrir Chrome...")

service = Service(r"C:\xampp\htdocs\project-test\tests\selenium\chromedriver.exe")
driver = webdriver.Chrome(service=service)

print("Chrome abriu!")

driver.get("http://localhost/project-test/src/login.php")

time.sleep(2)

driver.find_element(By.ID, "btnLogin").click()

time.sleep(2)

resultado = driver.find_element(By.ID, "resultado").text
print("Resultado:", resultado)

time.sleep(2)
driver.quit()