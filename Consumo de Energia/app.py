aparelho = input("Digite o nome do aparelho: ")
potencia = float(input("Digite a potência em watts (W): "))
horasDia = float(input("Quantas horas por dia ele é usado: "))

consumoMensal = (potencia * horasDia * 30) / 1000
gasto = consumoMensal * 0.75

print("Resultado")
print(f"Aparelho: {aparelho}")
print(f"Consumo estimado: {consumoMensal:.2f} kWh/mês")
print(f"Custo estimado: R$ {gasto:.2f}")