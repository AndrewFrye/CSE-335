import pandas as pd

# Specify the input XLSX file
input_file = "SampleData.xlsx"

# Load the Excel file
xlsx = pd.ExcelFile(input_file)

# Loop through each sheet and save it as a CSV file
for sheet_name in xlsx.sheet_names:
    # Read the sheet
    df = pd.read_excel(input_file, sheet_name=sheet_name)

    # Save it as a CSV file, using the sheet name
    output_file = f"{sheet_name}.csv"
    df.to_csv(output_file, index=False)
    print(f"Saved {sheet_name} to {output_file}")
