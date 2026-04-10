excelente = 0
ruim = 0
for i in range(10):
    nome = input("Digite seu nome: ")
    idade = int(input("Digite sua idade: "))
    opiniao = input("Opinião (Excelente, Bom, Ruim): ").upper()
    if opiniao == "EXCELENTE":
        excelente += 1
    elif opiniao == "RUIM":
        ruim += 1

print(f"Quantidade de atendimentos excelentes: {excelente}")
print(f"Quantidade de atendimentos ruins: {ruim}")