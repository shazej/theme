import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreditNotesOverdueComponent } from './credit-notes-overdue.component';

describe('CreditNotesOverdueComponent', () => {
  let component: CreditNotesOverdueComponent;
  let fixture: ComponentFixture<CreditNotesOverdueComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreditNotesOverdueComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CreditNotesOverdueComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
